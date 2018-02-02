<?php

function filter_ptags_on_images($content)
{
    // doe een regular expression replace
    // vind alle p tags die een img tag in zich hebben
    // <p> white space <img vind alles in de img tag /> white space </p>
    // vervang het met alleen de img tag
  

    // Als een img tag in een a tag is gewrapped, hou de a tag, maar verwijder de p tag(s)
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// we willen dat het gebeurt na de autop zooi (10 is "default")
add_filter('the_content', 'filter_ptags_on_images');