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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../../js/script.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
        <div class="contain">
        <div class="normal col-4 col-lg-4">
        <img id="image" class="img-responsive" src="{{asset('assets/images/bg.png')}}">
        <img id="overlay" class="img-responsive" src="{{asset('assets/images/overlay.png')}}">
        <img id="arrow" src="{{asset('assets/images/fleche.png')}}">
        <h1>Retour</h1>
        <p>Lorem ipsum dolor sit amet.</p>
        <h2>Maecenas lorem lectus, mattis pulvinar.</h2>
        <h3>Etiam nec placerat purus, in semper orci. Nam in sapien mauris. Vestibulum tempor sit.</h3>
        </div>
        <div class=" form col-8 col-lg-8">
        <h4>Creer un compte</h4>
        <p>Veuillez renseigner les informations ci-dessous</p>
        <form class="" method='POST'action='{{ route('contact.email') }}' onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" novalidate>
        {{ csrf_field() }}
        <p>vous etes :</p>
        <input type="radio" name="genre" id="Mr" value="Mr">
        <label for="for1">Mr</label>
        
        <input type="radio" name="genre" id="Mme" value="Mme">
        <label for="for2">Mme</label>
        
        <input type="radio" name="genre" id="Autre" value="Autre">
        <label for="for3">Autre</label>
        
        <input class="formulaire" type="text" name="name" placeholder="Nom">
        <input class="formulaire" type="text" name="prenom" placeholder="Prenom">
        <input class="formulaire" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif
        <input class="formulaire" type="date" name="birthdate" placeholder="Date de naissance">
        <input class="formulaire" type="text" pattern="[0-9]{5}" name="postalcode" placeholder="Code postal">
        <input class="formulaire" type="password" id="psw" name="password" placeholder="Mot de passe" >
        @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif
        <input type="checkbox" onclick="myFunction()">Show Password
        <input class="formulaire" type="password" id="confpsw" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        @if($errors->has('password_confirmation'))
        <p>{{ $errors->first('password_confirmation') }}</p>
        @endif
        <input type="checkbox" onclick="myOtherFunction()">Show Password
        <input type="radio" name="droit" id="agree" value="0">
        <label for="for3">J' accepte les <u>conditions generales de ventes</u> et les respecteraient sans conditions.</label>
        <input class="btn btn-dark" style="width:100%" type="submit" value="Creer un Compte">
        </form>
        <p>Vous avez deja un compte ? connectez-vous</p>
        </div>
        </div>
        
        </body>
        </html>
        