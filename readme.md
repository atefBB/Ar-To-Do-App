# DoSomething Software Engineering Spring Internship Homework

## Completed App ✅

> Screenshot

![screenshot](https://fvcproductions.files.wordpress.com/2017/01/screenshot.png)

> Main Page

![main](https://fvcproductions.files.wordpress.com/2017/01/home.png)

> Description

![description](https://fvcproductions.files.wordpress.com/2017/01/description.png)

## Setup Laravel 5.3

> [Great video on installation process](https://vimeo.com/164946495)
> [Laravel docs](https://laravel.com/docs/5.3/homestead)

1. Download Vagrant
2. Download VirtualBox
3. Open up Terminal
4. `vagrant box laravel/homestead`
5. They will ask for provider. Enter in `1` since we are using VirtualBox.
6. `cd ~`
7. We will need this folder later. `mkdir Code`
8. `git clone https://github.com/laravel/homestead.git Homestead`
9. `cd Homestead`
10. `bash init.sh`
11. While still in `~/Homestead` folder, `sudo nano /private/etc/hosts`
12. Edit hosts to include two lines.
13. Create key to authorize ssh. `ssh-keygen -t rsa -b 4096`
14. Hit enter twice.
15. `vagrant up`
16. Enter password when asked.
17. Edit `Homestead.yaml` file located in `~/.homestead/` using favorite text editor. I used [this GitHub repo](https://github.com/bestmomo/laravel5-example) as a basis so that a page would actually show up when I go to `homestead.app` in my browser. Otherwise, it'll always just say `no input file specified` or something along those lines.
18. Anytime you edit this Homestead.yaml file, you have to perform Steps 19, 20, & 21 so let's go ahead and do those now
19. `vagrant halt`
20. `vagrant reload --provision`
21. Enter password when asked.
22. While still in `~/Homestead` folder, `vagrant ssh`
23. `cd Code`
24. `cd ds-todos`
25. `composer install`
26. `touch .env`
27. `nano .env`
28. `php artisan migrate`
29. `php artisan db:seed `
30. `php artisan key:generate`
31. To make sure we can compile our `SASS` files, let's `npm i`
32. And then we perform `gulp watch`!
33. Head over to `http://ds-todos.app`
34. Time to edit our code!
35. Iterate and make this app look wonderful!

## Step 12

```
192.168.10.10  homestead.app
192.168.10.10  ds-todos.app
```

## Step 17

```
folders:
    - map: ~/Code
      to: /home/vagrant/Code
      type: "nfs"
    - map: ~/Dropbox/github/ds-todos
      to: /home/vagrant/Code/ds-todos
      type: "nfs"

sites:
    - map: homestead.app
      to: /home/vagrant/Code/projectname/public
    - map: ds-todos.app
      to: /home/vagrant/Code/ds-todos/public
```

## Step 27

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

---

### The Assignment

This repo contains all the code for a simple todo list application built using the [Laravel](https://laravel.com) Framework and the Bootstrap CSS Framework.

Your assignment is to add a feature that satisfies this user story:

```
As a user, I want to be able to click on a individual todo to see more detail about the task.
```

* Fork and clone this repository and set it up as a local app running inside [Homestead](https://github.com/laravel/homestead).
* Follow the installation instructions below once you have set it up in Homestead.
* You will notice that the application allows you to add a todo, view all todos, and delete a todo. Todos are composed of a `name` and a `description`. Your assignment is to link each todo to it's own page (`i.e. http://ds-todos.app/todo/2`) that displays both the name and description of the todo.

### Notes

* You have until 1/13 at 3:00pm (EST) to complete the assignment. Email me a link to your fork of this repository as the submission.
* If you need any clarification on these instructions, send questions my way and I will answer them to the best of my ability. My email address is `ssmith@dosomething.org`
* Use any further documentation you want to complete the assignment, but the [laravel documentation](http://laravel.com) is pretty solid. Check it out!
* Bonus: feel free to make the app look better, not required, but it is pretty hard to look at as it stands now.