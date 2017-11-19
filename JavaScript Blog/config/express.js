const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const bodyParser = require('body-parser');
const passport = require('passport');
const session = require('express-session');

module.exports = (app, config) => {
    // view engine setup
    app.set('views', path.join(config.rootFolder, '/views'));
    app.set('view engine', 'hbs');

    app.use(bodyParser.json());
    app.use(bodyParser.urlencoded({extended: true}));

    app.use(cookieParser());

    app.use(session({secret: 'secretString', resave: false, saveUninitialized: false}));

    app.use(passport.initialize());
    app.use(passport.session());

    app.use(express.static(path.join(config.rootFolder, 'public')));

    app.use((req, res, next) => {
        if (req.user) {
            res.locals.user = req.user;
        }

        next();
    });

    app.use(passport.session());
};


