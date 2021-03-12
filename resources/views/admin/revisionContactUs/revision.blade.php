@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Contact Us list @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Contact Us @endslot
        @endcomponent
        <table class="table table-striped">
            <thead>
            <th>First name</th>
            <th>Last name</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Received</th>
            <th>Attachment</th>
            </thead>
            <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{!! $contact->name !!}</td>
                    <td>{!! $contact->lastName !!}</td>
                    <td>{!! $contact->subject !!}</td>
                    <td>{!! $contact->message !!}</td>
                    <td>{!! $contact->email !!}</td>
                    <td>{!! $contact->phone_number !!}</td>
                    <td>{!! $contact->created_at !!}</td>
                    @if (isset($contact ->image))

                        <td>  <a href="{{ route('downloadfile',$contact->image) }}">Download</a></td>
                    @endif

                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>empty</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
