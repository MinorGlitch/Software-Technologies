package shoppinglist.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import shoppinglist.bindingModel.ProductBindingModel;
import shoppinglist.entity.Product;
import shoppinglist.repository.ProductRepository;

import javax.validation.Valid;
import java.util.List;

@Controller
public class ProductController {

    private final ProductRepository productRepository;

    @Autowired
    public ProductController(ProductRepository productRepository) {
        this.productRepository = productRepository;
    }

    @GetMapping("/")
    public String index(Model model) {
        List<Product> products = this.productRepository.findAll();

        model.addAttribute("products", products);
        model.addAttribute("view", "product/index");

        return "base-layout";
    }

    @GetMapping("/create")
    public String create(Model model) {
        model.addAttribute("view", "product/create");

        return "base-layout";
    }

    @PostMapping("/create")
    public String createProcess(@Valid ProductBindingModel productBindingModel, BindingResult bindingResult) {
        if (bindingResult.hasErrors()) {
            return "redirect:/create";
        }

        Product product = new Product(
                productBindingModel.getPriority(),
                productBindingModel.getName(),
                productBindingModel.getQuantity(),
                productBindingModel.getStatus());

        this.productRepository.saveAndFlush(product);

        return "redirect:/";
    }

    @GetMapping("/edit/{id}")
    public String edit(Model model, @PathVariable Integer id) {
        if (id == null) {
            return "redirect:/";
        }

        Product product = this.productRepository.findOne(id);

        if (product == null) {
            return "redirect:/";
        }

        model.addAttribute("product", product);
        model.addAttribute("view", "product/edit");

        return "base-layout";
    }

    @PostMapping("/edit/{id}")
    public String editProcess(
            Model model, @PathVariable Integer id,
            @Valid ProductBindingModel productBindingModel,
            BindingResult bindingResult) {

        if (id == null) {
            return "redirect:/";
        }

        if (bindingResult.hasErrors()) {
            model.addAttribute("product", productBindingModel);
            model.addAttribute("view", "product/edit");

            return "base-layout";
        }

        Product product = this.productRepository.findOne(id);

        if (product == null) {
            return "redirect:/";
        }

        product.setPriority(productBindingModel.getPriority());
        product.setName(productBindingModel.getName());
        product.setQuantity(productBindingModel.getQuantity());
        product.setStatus(productBindingModel.getStatus());

        this.productRepository.saveAndFlush(product);

        return "redirect:/";
    }
}
