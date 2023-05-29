
<x-form-layout>
<style>
     .right-button {
        float: right;
        width: 250px;
        height: 50px;
        padding: 8px;
        margin-left: 8px;
        background-color: #1266b4;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        font-size: 20px;
     }
</style>
    <div class="row main-content ">
        <div class="column " >
            <!--submit -->
            <div class="form-content">
                <br>
                <div class="icon"><i class="fas fa-check icon" style="color: green;"></i></div>
                <h2>THANK YOU!</h2>
                <p>
                    The form was submitted successfully.
                    <br>
                    Please wait for the confirmation to your email.
                </p>
            </div>
        </div>

        <div class="column " style="padding-top: 20px;">

            <div class="buttons">
                <a href="{{ '/' }}">
                    <button class="right-button">Back to HomePage</button>
                </a>
            </div>
        </div>
    </div>
    
</x-form-layout>