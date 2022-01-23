# CodeIgniter 4 Starter Kit

To me who uses Laravel a lot, it is really painful to find a good starter kit
for a new project. Laravel does a lot of starting points and because there are
visibly none for CodeIgniter, I decided to create a starter kit for CodeIgniter.

This starter kit is a mix with Laravel-like project, with the Laravel's
starting packages, so hopefully this starter kit has a good value. Any PRs
regarding improvement to the starting kit is welcome.

To-do:
- [x] Basic Authentication
- [ ] User control to edit the user's information via Dashboard

The package includes:
- Laravel mix (to mimic Laravel's asset compiling)
- TailwindCSS w/ DaisyUI (you can remove DaisyUI if you prefer to use plain TailwindCSS)
- AlpineJS
- ChartJS
- jQuery
- Simplelightbox
- Sweetalert2

## Getting started
- Clone this project.
- Run `composer install`.
- Run `npm install`.
- Run `npm run dev` or `npm run watch` to compile assets.

## Authentication
The authentication method is based on the `User` model. Inside the
`LoginController`, the `LoginUser` service will set the user's information to
the session. In default, the authentication only provide `username` as the
authentication key, you can override the key for whatever you like such as
`email`, but you have to make sure that field is exists in the `users` table.