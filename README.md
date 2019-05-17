<h1 align="center">
  Phone Notes
</h1>

Phone Notes is a simple Laravel dashboard made by students, open source nad free. Tired of writing sticky notes for your colleagues when someone called and they weren't at work? Use Phone Notes! A simple to use dashboard to create a Phone Note for your colleague, asign a phonenumber, company and many more things.

# Preview

### Screenshot

![Dashboard Preview](https://i.boring.host/141M3TYh.png)
![Colleagues Preview](https://i.boring.host/141LY8KP.png)

## Getting Started
In order to run **Phone Notes** on your local machine all what you need to do is to have the prerequisites stated below installed on your machine and follow the installation steps down below.

#### Prerequisites
  - Mysql
  - Composer
  - Apache
  - NPM
  - Git

#### Installing & Local Development
Start by typing the following commands in your terminal in order to get **Phone Notes** full package on your machine and starting a local development server with live reload feature.

```
> git clone https://github.com/MrMoosti/Phone-Notes.git Phone\ Notes
> cd Phone\ Notes
> composer install
> npm install
> npm run dev
```
#### Migrating Database
Before you can actually see the webshop, you'll need create an **.env** file in the **root** directory of the project. I'm sure there are plenty of examples on the internet.

```
> php artisan migrate:fresh
```

#### Usage
Create an account and you can view the dashboard.

#### Database structure

![UML](https://i.boring.host/141NSQKD.png)

## Deployment
In deployment process, you have two commands:

1. Build command
Used to generate the final result of compiling src files into build folder. This can be achieved by running the following command:
```
> npm run build
```

2. Preview command
Used to create a local dev server in order to preview the final output of build process. This can be achieved by running the following command:
```
> npm run watch
```

## Special Thanks
- [AppzCoder](http://www.appzcoder.com)

## Changelog
#### V 1.0.0
Still in development, no releases yet.

## Authors
- [M.E. Yilmaz](https://www.meyilmaz.com)
- [Robert-Jan](https://github.com/Rjripper)

## License

Adminator is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of the **Admin Dashboard Design** & **Webshop Design** template.


