# LA Project 3
## Members
- Jaafar Al Hadab
- Jack Mandell
- Qi Miao

## Design Decisions ##
### Theme
Web Development. Suitable colors for this theme are dark blue, and white as primary colors, light blue, orange, light pink, and indigo as secondary colors, with simple layouts and navigation.
### Navigation
Implemented a breadcrumbs navigation in all pages except for the index page. This is to keep with the simple theme of the website, and to send the user back to the showcase (f-layout) page so that its content is more emphasized (goals for web development).
### Typefaces
Going with the web development theme, slab-serif typefaces were selected. Roboto Slab and Roboto typefaces were chosen for the headings and paragraphs, respectively.
### Layout
- a head and tail bars
- content container at a width ratio to the viewport of ~1:1.6
- a block layout is used for index and showcase pages, and a grid layout is used for student pages
### Misc.
- for student pages, a z-ish layout is used with four content boxes that utilize the secondary theme colors of web development. The use of different colors for the boxes is a bit of an homage for the old website design.
- in student pages, the opacity of all content is set to 90-95% so that the light colors of the boxes are less interrupted without compromising the legibility
## Classes and relationships (from forked repository)
Classes:
- Student has
   - Name
   - Background
     - Picture, Introduction and Early life
- Major
- Extracirrculars
- CS Classes taken
    - has Course Number & Course Name


## Choreography (from forked repository)
For choreography, the pages follow one another by last name. This is for simplicity. On each student page, the layout goes by introduction, early life, cs coursework and extracirrculars. This is to show who each of us are as a person before diving in technically to see each of our individual skills.

