<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Contact;

use App\Http\Resources\ContactResource;

use App\Http\Requests\ContactCreateRequest;
use App\Http\Requests\ContactUpdateRequest;

class ContactController extends Controller
{
    public function list(){
        return ContactResource::collection(Contact::all());
    }

    public function single(Contact $contact){
        return new ContactResource($contact);
    }

    public function create(ContactCreateRequest $request){
        $data = $request->validated();

        if(key_exists('img', $data)){
            $data['img'] = Storage::put('public/img', $data['img']);
            $data['img'] = mb_substr($data['img'], 6, mb_strlen($data['img']));
        }
        $contact = Contact::create($data);
        return new ContactResource($contact);
    }

    public function update(Contact $contact, ContactUpdateRequest $request){
        $data = $request->validated();

        if(key_exists('img', $data)){
            $data['img'] = Storage::put('public/img', $data['img']);
            $data['img'] = mb_substr($data['img'], 6, mb_strlen($data['img']));
        }
        
        $contact->update($data);
        return new ContactResource($contact);
    }

    public function delete(Contact $contact){
        $fio = $contact->FIO;
        Storage::delete(preg_replace('%http://127.0.0.1:8000/storage%', 'public', $contact->img));
        $contact->delete();
        return "Контакт $fio удален";
    }
}
