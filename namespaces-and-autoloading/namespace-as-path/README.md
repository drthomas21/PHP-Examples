NAMESPACE AS A PATH
===================
Depending on the design architecture that you are using for a project, you can be using namespaces as a way to tell where the class is located relative to the root of the project. In the examples provided, we are using the PHP function `spl_autoload_register` to register a callback function that will take the namespace of the class to determine where the class is located.

Some of the key things to note is that When we want to load the class **Bar**, which is located in **foo/Bar.php**, we have to pass the full namespace for that class. The namespace is **\Foo** and the name of the class within that namespace is **Bar**, therefore we use **\Foo\Bar** to designate the class we want to load. Classes from one namespace can also extend classes from another namespace.

In some situations, you may find yourself using a class from a different namespace frequently. PHP offers some cheats to get around that with the keyword `use`. When you use `use`, it will map a reference of a class from a different namespace into the current namespace. However, this is assuming that there is not a class with the same name in the current namespace. For example doing:
```
use \Foo\Bar;`
```
will not work because there is already a class **Bar** in the current namespace, so instead we will use the `as` keyword to map it to a new name:
```
use \Foo\Bar as FooBar;
```
This will allow us to use **FooBar** in place of **\Foo\Bar**.
