<?php
namespace Codebox\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Codebox\Contact\Models\Contact;
class ContactController extends Controller
{
    public function getContactForm(Contact $contacts)
    {
        return view('contact::contact.form');
    }

    public function contact(Contact $contacts)
    {
        $request = request();
        $data = $this->validate($request, [
            'name'    => 'required|string|min:2|max:50',
            'email'   => 'required|email|min:10|max:50',
            'message' => 'required|string|min:5|max:150',
        ]);
        $data['status'] = config('contact.status');
        $contacts->create($data);
        return redirect()->back();
    }
}