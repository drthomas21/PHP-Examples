NAMESPACE AS A VENDOR MODULE
============================
Depending on the design architecture that you are using for a project, you can be using namespaces as a way to tell which vendor library that you will be using. Even though this is a design choice, it does not mean that using this structure is better than using namespace as a path. This design choice is used to store the abstract classes and interfaces into one folder while having the vendors version to extend/implement what is necessary to get those services working. One advantage that this namespace structure has over using namespace as a path, is that all classes specific to one vendor can be located under one folder and a vendor's folder can be quickly removed when support for that vendor ends.

To some extent, using namespace as a module is an extension of using namespace as a path. The namespace structure is as followed, **/Drivers/Api** is the name of the module that you want to use, **Google** specify which vendor to use for the module, and **Api** is the name of the class. To some degree, it is a bit more convoluted than doing the namespace **/Google/Drivers/Api**, but this is just an example of something that you can do.