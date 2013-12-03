<?php
  ////////     ////////     ////////      ///     ///  ////////  ////////    ////    ///   ///  ///
///     ///  ///     ///  ///     ///      ///   ///   ///       ///       ///  ///  ///   ///  ///
///     ///  ///     ///  ///     ///       /// ///    ///       ///       ///  ///  ///   ///  ///
///     ///  ///     ///  ///     ///         ///      //////    //////    ////////  /////////  ///
///     ///  ///     ///  ///     ///         ///      ///       ///       ///  ///  ///   ///  ///
///     ///  ///     ///  ///     ///         ///      ///       ///       ///  ///  ///   ///  ///
///     ///  ///     ///  ///     ///         ///      ///       ///       ///  ///  ///   ///
  ///////     /////////    /////////          ///      ////////  ////////  ///  ///  ///   ///  ///

              ///  ///  ///   //// //  //  ////     // /////   ////// // // ///  ///
              // // // // // //    ////// //  //    // //  // ///     // // // // //
              //    // ///// //    //  // //  //    // /////     ///  // // //    //
              //    // // //  //// //  //  ////     // //    /////    ///// //    //
          
/************************************* Promos as Lorem Ipsum *************************************/


class Macho {
  /*
   * Setup some default lengths with some obvious var names
   */
  static $headlineCharLength = 60;
  static $sentencesInParagraph = array(5,7);


  /*
   * MACHO PHRASES
   * to allow some nice variety, we'll split up Macho's speeches inito a few sections:
   *  $starting -- phrases suited for opening up a promo
   *  $people -- people macho addresses
   *  $callout -- tied in with $people, vague calling-outs
   *  $beginning -- beginnings of phrases (linked with $ending)
   *  $ending -- conclusions to some phrases (linked with $beginning)
   *  $isolated -- phrases that work well on their own
   */


  static $starting = array(
    "Happened so fast you can't even talk about it.",
    "Things are just poppin' right now, things are starting to cultivate, things are starting to grow, things are getting REAL colorful.",
    "You know what I'm reading? Yeah, I'm reading yesterday's newspaper, and that's Hulk Hogan and Tito Santana all rolled into one.",
    "Sugar is sweet and so is Honey, Macho Madness is on a roll and it can't be stopped.",
    "Unbelievable. Time distortion. Space is the place, Mean Gene Okerlund, goin' down that lonesome highway.",
    "I am the greatest Intercontinental Heavyweight Champion that ever lived and I am the greatest professional wrestler that ever lived, and I'm livin' now!",
    "Excuse me, just let me interupt this for a second. I'm just standin' here, I'm holding a gold belt, the Intercontinental Heavyweight Championship belt. I'm only the champion. You guys got a conversation goin', you're talkin' back and forth.",
    "A man in my position can never afford to look ridiculous, you understand that?",
    "I've got something to say to the zillions of people all around the world.",
    "Everybody welcome the new Intercontinental Heavyweight Champion of the world!",
    "This is real bad news for Hulk hogan, yeah, 'cause this is my passport to the World Title. And",
    "Talkin' about history. Talkin' about history. Talkin' about history, the one date, uh yeeah, just in my mind, February the 8th in Boston, Massachusetts at the Boston Garden, yeah. Where Larry Bird plays basketball, yeah!",
    "People? Those aren't people, those are peasants, yeeah, dig it!",
    "Macho King rules the peasants, the peasants don't rule the Macho King. And Duggan is a peasant. He will never rule the Madness. He will never wield the scepter. He will never wear the crown!"
  );

  static $people = array(
    "Tito Santana",
    "Hulk Hogan",
    "Honky Tonk Man",
    "Hacksaw Jim Duggan"
  );

  static $callout = array(
    "comparatively speaking to the Macho Man Randy Savage you are nothing but garbage, yeah!",
    "comparatively speaking, you are like a grain of sand in the Sahara Desert, and I am the entire desert!",
    "Macho Madness is comin' straight at you!",
    "I am the cream, yeah!",
    "I want you to take a look at this. 'Cause this belt never so much as it does right now.",
    "any crying, or any excuses, is just sour grapes!"
  );

  static $beginning = array(
    "I don't care if you got twenty-three wrestlers around the outside, it doesn't matter, no, ",
    "And I'm gonna tell ya something right now, ",
    "Lemme say it out loud, and let me point to the president of the World Wrestling Federation: ",
    "On balance, off balance, it doesn't matter: ",
    "I'm even talkin' to President Jack Tunney: ",
    "And the videoscope, yeah, I am looking right into you right now, ",
    "You thought so and I know so, ", 
    "'Cause I'm on a roll and I ain't stoppin', yeah, ",
    "Sweepin' professional wrestling completely clean, oh yeah, ",
    "Nothing means nothing,",
    "Deep breath, yeah, one time, here goes: ",
    "Two referees or two thousand referees, it doesn't matter: "
  );

  static $ending = array(
    "'cause I am ready and I will not let this opportunity slip through my fingers.",
    "I'm talkin' you can't hold that belt with me climbing through the ropes.",
    "I am the cream of the World Wrestling Federation, and there is no doubt about it, yeah!",
    "there is no one that does it better than the Macho Man Randy Savage.",
    "not only the Intercontinental Heavyweightbelt must fall, but the World Heavyweight Chapmionship belt.",
    "I've told you that from time to time, yes.",
    "I wanna tell ya something right now, I play to win and this is non-title, yeah!",
    "don't worry about that man, I'm on that, uh, quick type of a thing, yeah hey!",
    "don't think too much though otherwise you're gonna be on the couch and I'm gonna be over there.",
    "see, that's so easy it's no problem, I'm just bulgin' with muscles.",
    "I'm the Macho Man Randy Savage and when that comes from me that means something!",
    "I am the Macho King, sure I am."
  );

  static $isolated = array(
    "Just like the Silver Cloud Rolls Royce: top of the line.",
    "I'm talkin' about intensity, and I'm talkin' about Macho Madness.",
    "I'm talkin' about the rest of 1985, yeah, AND 1986!",
    "Does anybody have a chance against the Macho Man Randy Savage?",
    "Wrestling is a rough sport, and I am the roughest one in the sport.",
    "I am the number one wrestler in the world today!",
    "Cup of coffee in the big time!",
    "MAN....WOW, MAN, FREAK OUT!",
    "Macho Madness, yeah, has got more to offer than President Jack Tunney thinks that I got, yeah!",
    "Macho Madness, right now.",
    "Elizabeth understands what I'm talkin' about, yeah. Uh-huh!",
    "But don't be hypnotized, no!",
    "Reincarnation doesn't have to be, you can concentrate, and you can, uh, mental telepathy, yeah!",
    "He says I can't sing and I can't dance, but I can make romance, yeah.",
    "Macho Madness, yeah, Macho Madness, rollin', yeah!",
    "No more questions!",
    "Doin' the thing, yeah, like nobody ever does before, yeah!",
    "Put that thing down!",
    "Champion's prerogative! And I just exercised that option.",
    "I think that if I played basketball, and the way I am, super athlete that I am, I would overshadow Larry Bird.",
    "I'm proud, yeeah, I'm proud!",
    "Macho madness growin', and growin', and growin'! And more seductive than sex!",
    "I can say that.",
    "I'm relaxed, yeah, always relaxed.",
    "I am the true meaning of \"macho\" and that can't be denied.",
    "Apology accepted!",
    "Hulk Hogan doesn't have the only key to the gym, you know!",
    "Blood, sweat, and tears all rolled into one, and that's why I got this. The BELT!",
    "Kitten, that's what women are when I, uh, look at 'em, like little baby kittens.",
    "Female, yeah: the race of people that, uh, admire and lust after the Macho Man Randy Savage. Ask Elizabeth.",
    "I am the Macho King; bow to the Macho King!",
    "In't that funny, yeeah? You cold be the court jester for the Macho King, I'd slap ya and knock ya out!"
  );  
  
  /*
   * So we've got two things to use:
   * -- headline([$headline = "html"])
   * -- ipsum([$paragraphs = 5, $class = null, $html = "html"])
   *
   */



  /*
   * HEADLINE() :
   *   need just a single line of Macho Man wisdom? headline() is your friend!
   *   the only option is to turn off having it wrapped in <h1> tags. If you're
   *   using it for a blockquote or <h2> tag or whatever, fill it with null or ""
   *   and wrap the output with those tags.
   *
   */

  static function headline($html = true) {
    $pool = self::$isolated;
    $tag = $html ? array("<h1>","</h1>") : array("","");
    shuffle($pool);
    foreach($pool as $headline) {
      if(strlen($headline) < self::$headlineCharLength) {
        return $tag[0] . $headline . $tag[1];
      }
    }
  }


  /*
   * IPSUM() :
   *   the bread 'n' butter, the whole f'n show, as it were. this will produce
   *   paragraphs of randomly combined Macho-isms, determined via the first
   *   parameter (defaulted to 5 paragraphs). have a class you need to wrap
   *   the whole shebang in? no problem: the second parameter takes in the class-
   *   names. want just a blob of text? put the third parameter as null, or whatever
   *   and it'll blob it up. 
   */

  static function ipsum($paragraphs = 5, $class = null, $html = true) {
    // declare some variables
    $class = $class ? " class=\"{$class}\"" : "";
    $tag = $html ? array("<p{$class}>","</p>") : array("","");
    $starting = self::$starting;
    $people = self::$people;
    $callout = self::$callout;
    $beginning = self::$beginning;
    $ending = self::$ending;
    $isolated = self::$isolated;
    $ipsum = array();

    for($p = 0; $p < $paragraphs; $p++) {

      // shuffle the decks
      shuffle($starting);
      shuffle($people);
      shuffle($callout);
      shuffle($beginning);
      shuffle($ending);
      shuffle($isolated);

      // reset the $isolated counter and pop a tag on the beginning
      $iso = 0;
      $ipsum[] = $tag[0];

      // the opening paragraph will always be from the $starting array and a callout.
      if($p == 0) {
        $ipsum[] = $starting[rand(0, count($starting) - 1)];
        $ipsum[] = $people[rand(0, count($people) - 1)] . ", " . $callout[rand(0, count($callout) - 1)];
      } else {
        // next we'll build a paragraph
        $sentences = rand(self::$sentencesInParagraph[0], self::$sentencesInParagraph[1]);
        for($s = 0; $s < $sentences; $s++) {
          
          // an actual coin-flip (50/50) causes some un-wanted repeats, so i've expanded
          //   it to a one-in-four chance for a $beginning + $ending combo.
          $coinflip = rand(0, 3);
          if($coinflip == 0) {
            $beg = rand(0, count($beginning) - 1);
            $end = rand(0, count($ending) - 1);
            $ipsum[] = $beginning[$beg] . " " . $ending[$end];
          } else {
            $ipsum[] = $isolated[$iso];
            $iso++;
          }
        }
      }
      // close that bad boy up
      $ipsum[] = $tag[1];
    }

    return implode(" ", $ipsum);
  }
}
?>