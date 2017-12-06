import java.util.*;

public class BookLibrary {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int count = Integer.parseInt(scanner.nextLine());

        Library myLibrary = new Library();

        myLibrary.setBooks(new ArrayList<>());

        for (int i = 0; i < count; i++) {
            Book currentBook = new Book();

            String[] inputArgs = scanner.nextLine().split(" ");

            currentBook.setAuthor(inputArgs[1]);

            currentBook.setPrice(Double.parseDouble(inputArgs[inputArgs.length - 1]));

            myLibrary.getBooks().add(currentBook);


        }

        LinkedHashMap<String, Double> authorPricing = new LinkedHashMap<>();

        for (Book book : myLibrary.getBooks()) {
            if (!authorPricing.containsKey(book.getAuthor())) {
                authorPricing.put(book.getAuthor(), book.getPrice());
            } else {
                authorPricing.put(book.getAuthor(), authorPricing.get(book.getAuthor()) + book.getPrice());
            }
        }

        Collections.sort(authorPricing.keySet(), ((o1, o2) -> o1.ge));

        for (String key : authorPricing.keySet()) {
            System.out.printf("%s -> %s%n", key, authorPricing.get(key));
        }
    }
}

class Library {
    private String name;
    private List<Book> books;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public List<Book> getBooks() {
        return books;
    }

    public void setBooks(List<Book> books) {
        this.books = books;
    }
}

class Book {
    private String author;
    private double price;

    public String getAuthor() {
        return author;
    }

    public void setAuthor(String author) {
        this.author = author;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }
}
