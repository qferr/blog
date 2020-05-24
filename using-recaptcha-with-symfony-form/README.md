Using Google reCAPTCHA with Symfony Form
========================================

An example of my [Medium story](https://medium.com/@qferrer/dbfc902b0c50?source=friends_link&sk=b744d40785c8b62e16587cf9ba5497d5).

Installation
-------------

### Download the projet
```:shell script
$ git clone https://github.com/qferr/blog.git
$ cd  blog/using-recpatcha-with-symfony-form
```

### Installing the dependencies using composer

```:shell script
$ composer install
```

### Setting up the environment

Add your reCAPTCHA key and secret inside the .env.local file:

```:shell script
# .env.local
GOOGLE_RECAPTCHA_SITE_KEY=6LfoM_YUAAAAACd3tyP82gpjQRrjJar-AoHaCyVQ
GOOGLE_RECAPTCHA_SECRET_KEY=6LfoM_YUAAAAAD_e49c6kKAG2_EFYpKPcCWo3bCq
```

### Running the Symfony web server

```:shell script
$ symfony serve
```

Now you can go to the example form: http://localhost:8000/user/register
