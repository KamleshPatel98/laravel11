<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<form method="POST" action="{{ route('captcha') }}">
    @csrf
    <!-- Other form fields -->

    <div class="form-group">
        <div class="mt-3">
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mt-3"> 
            <div id="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-sm btn-danger reload" id="reload">&#x21bb;</button>
            </div>
        </div>
    </div>

    <button type="submit">Submit</button>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $('#reload').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "{{ route('get_captcha') }}",
            success: function (response) {
                $('#captcha span').html(response.captcha);
            }
        });
    });
</script>
