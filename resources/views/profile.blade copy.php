<x-form-layout>
    <form action="{{ route('profile-form') }}" method="get">

        <h2>Student 01</h2>
        <div class="row">
           
            <div class="col">
                <label for="inputFirstname" class="form-label">Firstname</label>

                <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname" name="firstname">
            </div>

            <div class="col">
                <label for="inputLastname" class="form-label">Lastname</label>

                <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" name="lastname">
            </div>

            <button type="submit" class="btn btn-primary">
                button
            </button>
        </div>
    
    </form> 

    <section>
        <form action="" method="post">
            <h2>Summary</h2>

            <div class="row">
            
                <div class="col">
                    <label for="inputFirstname" class="form-label">Firstname</label>
        
                    <input type="text" class="form-control"  aria-label="Firstname" name="firstname" value="{{ $firstname }}">
                </div>
        
                <div class="col">
                    <label for="inputLastname" class="form-label">Lastname</label>
        
                    <input type="text" class="form-control"  aria-label="Lastname" name="lastname" value="{{ $lastname }}">
                </div>
        
                <button type="submit" class="btn btn-primary">
                    button
                </button>
            </div>
        </form>
    </section>
</x-form-layout>