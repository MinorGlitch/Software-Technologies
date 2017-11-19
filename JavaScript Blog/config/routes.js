const userController = require('../controllers/user');
const homeController = require('../controllers/home');
const articleController = require('../controllers/article');
const profileController = require('../controllers/profile');

module.exports = app => {
    app.get('/user/register', userController.registerGet);
    app.post('/user/register', userController.registerPost);

    app.get('/user/login', userController.loginGet);
    app.post('/user/login', userController.loginPost);

    app.get('/user/logout', userController.logout);

    app.get('/', homeController.index);

    app.get('/article/create', articleController.createGet);
    app.post('/article/create', articleController.createPost);

    app.get('/article/details/:id', articleController.details);

    app.get('/user/details', profileController.profileGet);
};