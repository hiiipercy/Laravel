if($request->has('image')){
    $file = $request->file('image');
    $filename= $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $unique= md5(rand().time().$filename).'.'.$extension;
    $path = 'assets/img/clients/';
    $file->move($path,$unique);
    $image=$path.$unique;
}

    return Profile::create([
        'image' => $image,
        'age' => $request->age,
        'gender' => $request->gender,
        'description' => $request->description,
        'player_id' => $request->player_id,
    ]);