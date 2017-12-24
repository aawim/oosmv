<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Subcategory;
use App\Product;
use Auth;
use App\Store;
use Toastr;
class ProductController extends Controller
{
    private  $categories, $brands, $products;
    public function __construct()
    {
        $this->middleware('auth');
        $this->results = ["Document", "Electronic format" ];
        $this->brands = Brand::orderBy('name')->get();
        $this->categories = Category::where('is_active', 1)->orderBy('name')->get();
        $this->scategories = Subcategory::where('is_active', 1)->orderBy('name')->get();
        $this->products = Product::orderBy('name')->get();
       
    }




      public function index()
    {
                
        return view('product.index',['products' => $this->products] );
    }



    public function search()
    {
      return view('product.search');
    }

    public function findSubCatgeoryName(Request $request){
        $data = Subcategory::where('cat_id', $request->id)->where('is_active', 1)->get();
        return response()->json($data);
       
    }




    
    public function create($cat_id = null)
    {
        $scategories = Subcategory::where('cat_id', '=', $cat_id)->get();
 
        return view('product.create', 
        [   'results' => $this->results,
            'brands' => $this->brands,
            'categories' => $this->categories,
            'scategories' => $scategories,
        ]);
        
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'icon' => 'image|mimes:png,jpg,jpeg',
            'cat'=>'required',
            'scat'=>'required',
            ]);

        $d = new Product();
        $d->name = $request->name;
        $d->cat_id = $request->cat;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price =$request->price;
        $d->dprice =$request->dprice;
        $d->qty = $request->qty;
        $d->availability = 0;
        $d->formfactor = 0;
        $d->color = 'None';
        $d->description = 'None';

        $d->store()->associate(Store::where('user_id', '=', Auth::user()->id)->first());
        //$d->store_id = Store::where('user_id', '=', Auth::user()->id)->get();
        $d->is_active = 0;
 
        if ($request->hasFile('icon')) {
            $imgName = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->image = $product;
            }else{
                $d->image = "None";
                    }
           $store_id = Store::where('user_id', '=', Auth::user()->id)->first();
        if($store_id == NULL){
            Toastr::warning('Product cannot be created, Create a store first', 'OOSMV', ["positionClass" => "toast-top-right"]);
            return redirect()->route('product.create');
        }else{
           
            $d->save();
            Toastr::success('New product added successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
            return redirect()->route('product.create');
        }
      
    }


    
    public function show($id)
    {
        //
    }
 
    public function edit($id)
    {
        $d = Product::findOrFail($id);
        return view('product.edit', ['d' => $d, 'categories' => $this->categories,'brands' => $this->brands]);
    }
 
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'cate'=>'required',
            'scat'=>'required',
            ]);

      
        $d = Product::findOrFail($id);
        $d->name = $request->name;
        $d->cat_id = $request->cate;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price =$request->price;
        $d->dprice =$request->dprice;
        $d->qty = $request->qty;
        $d->store_id = $d->store_id;
        $d->is_active = $request->is_active;
        $d->availability = $request->availability;

        if ($request->hasFile('image_file')) {
            
            $imgName = $request->file('image_file')->getClientOriginalName();
            $request->file('image_file')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            
            $d->image = $product;

            }else{
                $d->image = $d->image;
            }
 
        $d->save();
        Toastr::success('A product updated successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('product.index');
    }

    
    public function destroy($id)
    {
        $d = Product::findOrFail($id);
        $d->delete();
        return redirect()->route('product.index');
    }
}
