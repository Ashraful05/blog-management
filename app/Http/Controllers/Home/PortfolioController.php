<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function frontPortfolio()
    {
        $frontPortfolio = Portfolio::latest()->get();
        return view('frontend.portfolio.front_portfolio',compact('frontPortfolio'));
    }
    public function allPortfolio()
    {
        $allPortfolio = Portfolio::latest()->get();
        return view('admin.portfolio.all_portfolio',compact('allPortfolio'));
    }
    public function addPortfolio()
    {
        return view('admin.portfolio.add_portfolio');
    }
    public function savePortfolio(Request $request)
    {
        $this->validate($request,[
            'portfolio_name'=>'required|string|min:4|max:255',
            'portfolio_title'=>'required|string|min:4|max:255',
            'portfolio_image' => 'required',
            'portfolio_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image = $request->file('portfolio_image');
        $name_gen = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1020,519)->save('upload/portfolio_image/'.$name_gen);
        $imageUrl = 'upload/portfolio_image/'.$name_gen;

        Portfolio::insert([
            'portfolio_image'=>$imageUrl,
            'portfolio_name'=>$request->portfolio_name,
            'portfolio_title'=>$request->portfolio_title,
            'portfolio_description'=>$request->portfolio_description,
            'created_at'=>Carbon::now(),
        ]);
        $notification = [
            'alert-type'=>'success',
            'message'=>'Portfolio info saved!!!'
        ];
        return redirect()->route('all_portfolio')->with($notification);
    }
    public function editPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio',compact('portfolio'));
    }
    public function updatePortfolio(Request $request, $id)
    {
        $oldImage = $request->old_image;
        if($request->file('portfolio_image'))
        {
            if(!empty($oldImage)){unlink($oldImage);}
            $image = $request->portfolio_image;
            $name_gen = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1020,519)->save('upload/portfolio_image/'.$name_gen);
            $imageUrl = 'upload/portfolio_image/'.$name_gen;

            Portfolio::findOrFail($id)->update([
                'portfolio_image'=>$imageUrl,
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]);
            $notification = array(
                'message' => 'Portfolio Updated with Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all_portfolio')->with($notification);
        }else{

            Portfolio::findOrFail($id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]);
            $notification = array(
                'message' => 'Portfolio Updated without Image Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('all_portfolio')->with($notification);

        }
    }
    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $image = $portfolio->portfolio_image;
        if($image){
            unlink($image);
            $portfolio->delete();
            $notification = array(
                'message' => 'Portfolio Deleted with Image!!',
                'alert-type' => 'error'
            );
            return redirect()->route('all_portfolio')->with($notification);
        }
        $portfolio->delete();
        $notification = array(
            'message' => 'Portfolio Deleted without Image!!',
            'alert-type' => 'error'
        );
        return redirect()->route('all_portfolio')->with($notification);
    }
    public function portfolioDetails($id)
    {
        $details = Portfolio::findOrFail($id);
        return view('frontend.portfolio.portfolio_details',compact('details'));
    }
}
