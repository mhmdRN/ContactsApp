<x-layout>
    <div class="container my-5">
        <x-modal title="Delete" body="Are you sure you want to delete this contact?" 
        :id="$contact->id"/>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card border-success">
                    <div class="text-center fw-bold fs-4 card-header">Contact Info</div>
                    <div class="card-body">
                        <h5 class="card-title my-3">
                            First Name: <span class="text-capitalize text-secondary me-4 ">{{$contact->firstName}}</span>
                            Last Name: <span class="text-capitalize text-secondary">{{$contact->lastName}}</span> 
                        </h5>
                        <h5 class="card-title my-3"> 
                            Email: <span class="text-capitalize text-secondary">{{$contact->email}}</span>
                        </h5>
                        <h5 class="card-title my-3"> 
                            Phone Number: <span class="text-capitalize text-secondary">{{$contact->phone}}</span>
                        </h5>
                        <h5 class="card-title my-3"> 
                            Address: <span class="text-capitalize text-secondary">{{$contact->address}}</span>
                        </h5>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                            <a href="/edit/{{$contact->id}}" class="btn btn-success my-3 me-2">Update</a>
                            <button class="btn btn-danger my-3" type="submit"
                            data-bs-toggle="modal" data-bs-target="#deleteContact">Delete</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>