# PHPbase
A base for personal php development.

## Concept
PHP is messy. A jumble of procedural and object-orientated programming.
This library will attempt to reduce the pain of php by doing the following:

- The library will require several custom packages. 
The library will then introduce new classes that extend and build upon the custom packages.
The ideal end-result is a library that could be included in any PHP project with the purpose of
simplifying, standardizing and accelerating the development process.
- The library could potentially also have a lightweight fork (i.e. PHPbase-light) which would contain
a reduced set of base packages while still maintaining the classes that tie said packages together.
- Alternatively/additionally, the library could support plugins that extend upon the core functionality,
allowing the user to build PHPbase up as needed with functionality suited to the user's needs.

### Potential Classes
- __Values__
  - Number
  - String
  - Array
- __Resources__
  - File
- __Services__
  - Term
  - DB
  - Website

## Development process
Packages will be developed within PHPbase to begin with. Once the packages are in a more complete state (say 
v1.0 or similar) the packages can be extracted out. This will reduce the workload of hopping back and forth
between packages and allow immediate testing of integration possibilities with other packages. Or in the case
of packages that closely complement each other, they can be developed in tandem in one environment.