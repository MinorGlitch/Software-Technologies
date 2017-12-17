package imdb.entity;

import org.hibernate.validator.constraints.Length;

import javax.persistence.*;
import javax.validation.constraints.Max;
import javax.validation.constraints.Min;

@Entity
@Table(name = "films")
public class Film {
	@Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Integer id;

	@Column(nullable = false)
    @Length(min = 1)
    private String name;


    @Column(nullable = false)
    @Length(min = 1)
    private String genre;

    @Column(nullable = false)
    @Length(min = 1)
    private String director;

    @Column(nullable = false)
    @Min(1900)
    @Max(2020)
    private Integer year;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getGenre() {
        return genre;
    }

    public void setGenre(String genre) {
        this.genre = genre;
    }

    public String getDirector() {
        return director;
    }

    public void setDirector(String director) {
        this.director = director;
    }

    public Integer getYear() {
        return year;
    }

    public void setYear(Integer year) {
        this.year = year;
    }
}
