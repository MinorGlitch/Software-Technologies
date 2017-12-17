const mongoose = require('mongoose');

let filmSchema = mongoose.Schema({
    name: {type: 'string', required:true},
    genre: {type: 'string', required:true},
    director: {type: 'string', required:true},
    year: {type: 'number', required:true, min: 1900, max: 2017}
});

let Film = mongoose.model('Film', filmSchema);

module.exports = Film;