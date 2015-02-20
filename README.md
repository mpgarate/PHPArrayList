# PHPArrayList

Dynamically reallocated ArrayList based on the Java 8 implementation. 

This approach provides a list with amortized constant time access for get and set operations. 

Referenced the [openJKD 8 implementation of ArrayList](
http://grepcode.com/file/repository.grepcode.com/java/root/jdk/openjdk/8-b132/java/util/ArrayList.java#ArrayList.remove%28int%29).

### Tests
For tests, run:
```sh
phpspec
```
