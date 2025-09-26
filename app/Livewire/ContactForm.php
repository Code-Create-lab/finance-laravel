<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use App\Models\ContactForm as ModelsContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{

    public $name, $phone, $city, $state, $loan_amount, $business_type, $loan_category, $collateral, $terms;

    protected $rules = [
        'name' => 'required|string|min:3',
        'phone' => 'required|max:10',
        'city' => 'nullable|string',
        'state' => 'nullable|string',
        'loan_amount' => 'nullable|numeric',
        'business_type' => 'nullable|string',
        'loan_category' => 'nullable|string',
        'collateral' => 'nullable|string',
        'terms' => 'accepted'
    ];

    public function submit()
    {
        $this->validate();

        // 👉 Save to DB or send email here
        // Example: Mail::to('admin@example.com')->send(new ContactFormMail($this->all()));

        $formData = [
            'name' => $this->name,
            'phone' => $this->phone,
            'city' => $this->city,
            'state' => $this->state,
            'loan_amount' => $this->loan_amount,
            'business_type' => $this->business_type,
            'loan_category' => $this->loan_category,
            'collateral' => $this->collateral,
        ];

        // ✅ Save to DB
        ModelsContactForm::create($formData);


        Mail::to(['umeshgrover14@gmail.com', 'Umesh@vistara.finance'])->send(new ContactFormMail($formData));
        session()->flash('success', 'Form submitted successfully!');

        $this->reset(); // reset form fields
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
