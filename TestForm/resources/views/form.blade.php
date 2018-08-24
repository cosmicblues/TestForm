    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Fonts --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <body>
    <div class="">
    <form method='POST'action='{{ route('contact.email') }}' onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" novalidate>
    {{ csrf_field() }}
    <input type="radio" name="genre" id="Mr" value="Mr">
    <label for="for1">Mr</label>

    <input type="radio" name="genre" id="Mme" value="Mme">
    <label for="for2">Mme</label>

    <input type="radio" name="genre" id="Autre" value="Autre">
    <label for="for3">Autre</label>

        <input type="text" name="name" placeholder="Nom" required data-validation-required-message="Please enter a nom.">
        <input type="text" name="prenom" placeholder="Prenom" required data-validation-required-message="Please enter a prenom.">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required data-validation-required-message="Please enter an E-mail.">
        @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif
        <input type="date" name="birthdate" placeholder="Date de naissance" required data-validation-required-message="Please enter a birthdate.">
        <input type="text" pattern="[0-9]{5}" name="postalcode" placeholder="Code postal" required data-validation-required-message="Please enter a ZIPcode.">
        <input type="password" name="password" placeholder="Mot de passe" required data-validation-required-message="Please enter a password.">
        @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)" required data-validation-required-message="Please confirm your password.">
        @if($errors->has('password_confirmation'))
        <p>{{ $errors->first('password_confirmation') }}</p>
        @endif
        <input type="radio" name="droit" id="agree" value="0">
        <label for="for3">Veuillez acceptez les conditions d'utilisation pour continuer.</label>
        <input type="submit" value="M'inscrire">
    </form>
    </div>

    </body>
</html>
