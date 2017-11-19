const express = require('express');
const config = require('./config/config');
const app = express();

let environment = 'development';

require('./config/database')(config[environment]);
require('./config/express')(app, config[environment]);
require('./config/passport')();
require('./config/routes')(app);

module.exports = app;
