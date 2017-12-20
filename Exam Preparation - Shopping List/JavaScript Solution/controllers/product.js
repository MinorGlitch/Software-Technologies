const Product = require('../models/Product');

module.exports = {
	index: (req, res) => {
        Product.find().then(products => {
            res.render('product/index', {"entries": products});
		})
    	},
	createGet: (req, res) => {
        return res.render('product/create');
	},
	createPost: (req, res) => {
		let product = new Product(req.body);

		Product.create(product).then(p => {
			res.redirect('/');
		}).catch(e => {
		    return res.redirect('/create');
        })
	},
	editGet: (req, res) => {

	    let id = req.params.id;

	    Product.findById(id).then(product => {
	        res.render('product/edit', product);
        }).catch(e => {
            res.redirect('/');
        });
	},
	editPost: (req, res) => {
        let productId = req.params.id;

        let product = req.body;

        Product.findByIdAndUpdate(productId, product, {runValidators: true}).then(p => {
            res.redirect('/');
        }).catch(e => {
            return res.redirect('/');
        });
    }
};