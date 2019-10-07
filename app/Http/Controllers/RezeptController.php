<?php




namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Rezept;
use App\Http\Controllers\Controller;
use App\Traits\UploadTrait;
use Lang;

class RezeptController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function all()
    {
        $rezepts = Rezept::sortable()->paginate(10);

        return view('rezepts.all', ['rezepts' => $rezepts]);
//        return view('rezepts.index', compact('rezepts'));
//
    }
    public function index()
    {
        $rezepts = Rezept::orderBy('id', 'DESC')->sortable()->paginate(24);

        return view('rezepts.index', ['rezepts' => $rezepts]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function category(Request $request)
    {
                if ($request->has('kate')) { 
        $category1 = $request->input('kate');
        $rezepts = Rezept::where('category', '=', $category1)->sortable()->paginate(10);
        return view('rezepts.category', ['rezepts' => $rezepts]);
                } else {
                            $rezepts = Rezept::sortable()->paginate(10);

        return view('rezepts.category', ['rezepts' => $rezepts]);
                }
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('rezepts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $rezept = new Rezept([
        'name' => $request->get('name'),
        'time'=> $request->get('time'),
        'persons'=> $request->get('persons'),
        'z1' => $request->get('z1'),
'z2' => $request->get('z2'),
'z3' => $request->get('z3'),
'z4' => $request->get('z4'),
'z5' => $request->get('z5'),
'z6' => $request->get('z6'),
'z7' => $request->get('z7'),
'z8' => $request->get('z8'),
'z9' => $request->get('z9'),
'z10' => $request->get('z10'),
'z11' => $request->get('z11'),
'z12' => $request->get('z12'),
'z13' => $request->get('z13'),
'z14' => $request->get('z14'),
'z15' => $request->get('z15'),
'z16' => $request->get('z16'),
'z17' => $request->get('z17'),
'z18' => $request->get('z18'),
'z19' => $request->get('z19'),
'z20' => $request->get('z20'),
'z21' => $request->get('z21'),
'directions' => $request->get('directions'),
'editor' => $request->get('editor'),
'added' => $request->get('added'),
'notes' => $request->get('notes'),
'category' => $request->get('category'),

      ]);
        if ($request->has('pic')) {
            $image = $request->file('pic');
            $img = Image::make($image);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/upload/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);

            $endname = $name. '.' . $image->getClientOriginalExtension();
            // Set user profile image path in database to filePath
            $rezept->pic = $endname;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $tumbname = '/upload/tumb/' . $filename;
            $rezept->tumb = $filename;
            $img->save(public_path('/upload/tumb/' . $filename));
        }
        $rezept->save();
        $add = Lang::get('sentence.added');
        return redirect('/rezepts')->with('success', $add);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $rezept = Rezept::find($id);
        return view('rezepts.show', array('rezept' => $rezept));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $rezept = Rezept::find($id);

        return view('rezepts.edit', compact('rezept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rezept = Rezept::find($id);
        $rezept->name = $request->get('name');
        $rezept->time = $request->get('time');
        $rezept->persons = $request->get('persons');
        $rezept->category = $request->get('category');
        $rezept->z1 = $request->get('z1');
        $rezept->z2 = $request->get('z2');
        $rezept->z3 = $request->get('z3');
        $rezept->z4 = $request->get('z4');
        $rezept->z5 = $request->get('z5');
        $rezept->z6 = $request->get('z6');
        $rezept->z7 = $request->get('z7');
        $rezept->z8 = $request->get('z8');
        $rezept->z9 = $request->get('z9');
        $rezept->z10 = $request->get('z10');
        $rezept->z11 = $request->get('z11');
        $rezept->z12 = $request->get('z12');
        $rezept->z13 = $request->get('z13');
        $rezept->z14 = $request->get('z14');
        $rezept->z15 = $request->get('z15');
        $rezept->z16 = $request->get('z16');
        $rezept->z17 = $request->get('z17');
        $rezept->z18 = $request->get('z18');
        $rezept->z19 = $request->get('z19');
        $rezept->z20 = $request->get('z20');
        $rezept->z21 = $request->get('z21');
        $rezept->editor = $request->get('editor');
        $rezept->added = $request->get('added');
        $rezept->directions = $request->get('directions');
        $rezept->notes = $request->get('notes');
        if ($request->has('pic')) {
            $image = $request->file('pic');
            $img = Image::make($image);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/upload/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);

            $endname = $name. '.' . $image->getClientOriginalExtension();
            // Set user profile image path in database to filePath
            $rezept->pic = $endname;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $tumbname = '/upload/tumb/' . $filename;
            $rezept->tumb = $filename;
            $img->save(public_path('/upload/tumb/' . $filename));
        }


        $rezept->save();
        $upd = Lang::get('sentence.updated');
        return redirect('/rezepts')->with('success', $upd);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $rezept = Rezept::find($id);
        $rezept->delete();
        $upd = Lang::get('sentence.deleted');
        return redirect('/rezepts/')->with('success', $upd);
    }

    public function lang($locale)
    {
        Rezept::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
