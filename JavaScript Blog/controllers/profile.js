const mongoose = require('mongoose');
const User = mongoose.model('User');

module.exports = {
    profileGet: (req, res) => {
        if (!req.isAuthenticated()) {
            res.redirect('/');
            return;
        }
        res.render('user/details');
    }
};