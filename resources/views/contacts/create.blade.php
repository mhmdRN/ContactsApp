<x-layout>
    
    @if (session()->has('message'))
    <x-alert title="Created" :body="session()->get('message')"/>
        
    @endif
        <div class="container">
        <a class="mt-3 btn btn-outline-success" href="/"><-- Back</a>
        <div class="row justify-content-center my-3">
            <div class="col-5 border border-success rounded p-3">
                <form action="{{url('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{old('firstName')}}">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName"
                        value="{{old('lastName')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                        value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                        value="{{old('phone')}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                        value="{{old('address')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Contact</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>