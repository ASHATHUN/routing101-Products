<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $products = [ 
        ['id' => 1, 'name' => 'Aitakatta - อยากจะได้พบเธอ', 
            'description' => 'BNK48 1st Single', 
            'center' => 'Music',
            'price' => 14800859,
            'image' => 'https://f.ptcdn.info/258/066/000/pysqg08gidu9wK5ta07H-o.jpg'],

        ['id' => 2, 'name' => 'Koisuru Fortune Cookie - คุกกี้เสี่ยงทาย', 
            'description' => 'BNK48 2nd Single', 
            'center' => 'Mobile',
            'price' => 201612315,
            'image' => 'https://i.scdn.co/image/ab67616d0000b273c8d5917e778b6d836b7c7ee6'], 

        ['id' => 3, 'name' => 'Kimi wa Melody - เธอคือ…เมโลดี้', 
            'description' => 'BNK48 4th Single', 
            'center' => 'Noey',
            'price' => 27090385,
            'image' => 'https://upload.wikimedia.org/wikipedia/th/thumb/a/aa/Bnk48_4th_single.jpg/330px-Bnk48_4th_single.jpg'], 

        ['id' => 4, 'name' => 'BNK Festival', 
            'description' => 'BNK48 5th Single',
            'center' => 'Pun', 
            'price' => 8908855,
            'image' => 'https://upload.wikimedia.org/wikipedia/th/thumb/0/0d/BNK48_5th_Single_CD.jpg/330px-BNK48_5th_Single_CD.jpg'], 

        ['id' => 5, 'name' => '77 no Suteki na Machi e – 77 ดินแดนแสนวิเศษ', 
            'description' => 'BNK48 7th Single', 
            'center' => 'Cherprang', 
            'price' => 4031773,
            'image' => 'https://upload.wikimedia.org/wikipedia/th/0/0e/BNK48_77_no_Suteki_na_Machi_e_Type_A.jpg'], 

        ['id' => 6, 'name' => 'Heavy Rotation', 
            'description' => 'BNK48 9th Single', 
            'center' => 'Jane', 
            'price' => 6600157,
            'image' => 'https://upload.wikimedia.org/wikipedia/th/2/26/BNK48_HeavyRotation.jpg'], 
        
        ['id' => 7, 'name' => 'ดีอะ', 
            'description' => 'BNK48 10th Single, 1st Original Main Song', 
            'center' => 'Mobile', 
            'price' => 7811166,
            'image' => 'https://upload.wikimedia.org/wikipedia/th/6/60/BNK48_DAAA.jpg'], 

        ['id' => 8, 'name' => 'First Rabbit', 
            'description' => 'BNK48 11th Single Coupling Song', 
            'center' => 'Paeyah & Hoop', 
            'price' => 4287981,
            'image' => 'https://images.genius.com/7aab14cc3d52a2c784b1e506fdc6a851.1000x1000x1.jpg'], 
        
        ['id' => 9, 'name' => 'BORDERLESS', 
            'description' => 'BNK48 17th Single', 
            'center' => 'L', 
            'price' => 532317,
            'image' => 'https://images.workpointtoday.com/workpointnews/2024/07/30142953/1722324588_41531_Poster.jpg'], 

        ['id' => 10, 'name' => '#Sukinanda', 
            'description' => 'BNK48 5th Album Lead Song',
            'center' => 'Marine', 
            'price' => 381585,
            'image' => 'https://f.ptcdn.info/056/086/000/m37776v9ilHim9TlmpF-o.jpg'], 

        ['id' => 11, 'name' => 'Sayonara Crawl', 
            'description' => 'BNK48 11th Single',
            'center' => 'Music & Fond & Paeyah & Champoo', 
            'price' => 4154988,
            'image' => 'https://images.workpointtoday.com/workpointnews/2022/03/21135444/1647845681_64396_S__17916182.jpg'], 

        ['id' => 12, 'name' => 'Shonichi - วันแรก', 
            'description' => 'BNK48 3th Single',
            'center' => 'Music', 
            'price' => 16066586,
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/0c/94/72/0c947292-dcce-a863-ce15-6d961a8bf686/cover.jpg/1200x1200bb.jpg'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id); 
        
        if (!$product) { 
            abort(404, 'Product not found'); 
        } 

        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
