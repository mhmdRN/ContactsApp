
<x-layout>
    <div class="container my-5">
            @if (session()->has('message'))
                <x-alert title="!!!" :body="session()->get('message')"/>
            @endif
            <div class="row justify-content-center my-3">
                <div class="col-6">
                    <form class="d-flex " action="/" method="GET">
                        @csrf
                        <input class="form-control me-2" type="text" name="search" id="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-2">
                    <a class="btn btn-success" href="{{url('create')}}">Create a Contact?</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Show Details</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                            @forelse ($contacts as $contact)
                                
                                <tr>   
                                    <td> {{$contact->firstName}} </td>
                                    <td>{{$contact->lastName}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td><a class="btn btn-success" href="/show/{{$contact->id}}">Show</a></td>
                                </tr>
                            
                            @empty
                                <tr>
                                    <td colspan="6" class="h2 text-center text-secondary">No Contacts Found</td>
                                </tr>    
    
                            @endforelse
                    </table>
                    <div class="my-3">
                        {{$contacts->withQueryString()->links("pagination::bootstrap-5")}}
                    </div>
                </div>
            </div>
    </div>
</x-layout>