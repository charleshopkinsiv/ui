# User Interface Controller
My goal for this package is to have a simple controller that abstracts many of the common functionalities you find in user interfaces. The Ui object is great to pass in to a data mapper since it will have all of the needed data to perform queries. You can add different filters you would like to have in the queries. It will then provide a FilterCollection you can use on your ui to provide options for requests. There will be different types of Filter objects you can instantiate and add to the UI object. I plan to have a front end component for each filter. Most of them will correspond to different Bootstrap inputs. This package should allow for the quick development of different applications for viewing large data sets.

### There are two types of displays so far
* Catalog
* Table

### These are the different pieces of data that can be collected and used to return results
* Pagination
* Search
* Count
* Sort
* Filters
* Columns

## Catalog
The catalog class will return Catalog object which is composed of CatalogItems. CatalogItems have an image, title and very little image data.