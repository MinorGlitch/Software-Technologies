const User = require('mongoose').model('User');
const encryption = require('../utilites/encryption');

module.exports = {
    registerGet: (req, res) => {
        res.render('user/register');
    },
    registerPost: (req, res) => {
        let registerArgs = req.body;

        let errorMessage = undefined;

        User.findOne({email: registerArgs.email}).then(user => {
            if (user) {
                errorMessage = 'This user already exists!';
            } else if (registerArgs.password !== registerArgs.repeatedPassword) {
                errorMessage = 'Passwords do not match';
            }

            if (errorMessage) {
                console.log(errorMessage);
                registerArgs.error = errorMessage;
                res.render('user/register', registerArgs);
            } else {
                let salt = encryption.generateSalt();
                let passwordHash = encryption.hashPassword(registerArgs.password, salt);

                let userObj = {
                    email: registerArgs.email,
                    passwordHash: passwordHash,
                    fullName: registerArgs.fullName,
                    salt: salt
                };

                User.create(userObj).then(user => {
                    req.logIn(user, (err) => {
                        if (err) {
                            registerArgs.error = err.message;
                            res.render('user/register', registerArgs);
                            return;
                        }

                        console.log(`${registerArgs.email} has been registered`);
                        res.redirect('/');
                    })
                })
            }
        });
    },
    loginGet: (req, res) => {
        res.render('user/login');
    },
    loginPost: (req, res) => {
        let loginArgs = req.body;

        User.findOne({email: loginArgs.email}).then(user => {
            if (!user || !user.authenticate(loginArgs.password)) {
                let errorMsg = 'Username or password is invalid!';
                loginArgs.error = errorMsg;
                console.log(errorMsg);
                res.render('user/login', loginArgs);

            }
            else {
                console.log('Login successful');

                req.logIn(user, (err) => {
                    if (err) {
                        console.log(err);
                        res.redirect('/user/login', {error: err.message});
                        return;
                    }

                    res.redirect('/');
                });
            }
        })
    },
    logout: (req, res) => {
        req.logOut();
        console.log('Logged out');
        res.redirect('/');
    }
};