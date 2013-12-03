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
Macho::headline( [ bool $html = true] )
```

Generates "headline" text (isolated Macho phrases that work on their own). Option to return text without `<h1></h1>` wrapper

```PHP
Macho::ipsum( [ int $paragraphs = 5, string $class = null, bool $html = true ] )
```

Generates paragraph ipsum text. Options include: number of paragraphs, attaching class names to the `<p>` tags, and returning plain text. (Note: plain text will push each paragraph together)

<h5>Macho vars</h5>

```PHP
Macho::$headlineCharLength = 60; // max characters in a "headline"
Macho::$sentencesInParagraph = array(5,7); // for variety, enter a range.
```

Also, filling the `Macho::$people` array with names specific to your app can produce fun results!