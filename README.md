macho ipsum
==========

basic usage:

```PHP
Macho::headline()
```

will generate a random sentence wrapped in ```<h1>``` tags.

```PHP
Macho::ipsum()
```  

will generate 5 paragraphs (using ```<p>``` tags).

<h3>Options</h3>

```PHP
Macho::headline( [ string $html = "html" ] )
```

Anything other than "html" (which is the default), will result in a blob plain text.

```PHP
Macho::ipsum( [ int $paragraphs = 5, string $class = null, string $html = "html" ] )
```

Adjust the number of paragraphs produced, add a class name, or have ipsum produced as a blob of plain text.
