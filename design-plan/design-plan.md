# Project 1, Milestone 1 - Design & Plan

Your Name: Yufu Mo
ym445

## 1. Persona

[1. Pick a persona]

I've selected **[Abby]** as my persona.

I've selected my persona because:

1) Abby has low confidence about doing unfamiliar computing tasks. If the website is a little bit too complicated for her, she tend to blame herself instead of the designer.

2) She uses technologies to solve the problems or accomplish the tasks. Thus, she might be willing to spend time figuring out how the website works.

## 2. Sketches

[2. Create some sketches to generate ideas about a website design that would work for your persona.]

1) My sketches are based on pretty simple design, which is good for Abby since she rarely has spare time to learn how to use the website.

2) It's well organized in three parts: basic information, projects and more about Walt.

Page 1 and 2
![Page 1 and 2](/images/E.jpg)
Page 3 and 4
![Page 3 and 4](/images/D.jpg)

## 3. Wireframes

[3. Author detailed wireframes that will become the design that you program for the final milestone.]

Page 1 and 2
![Page 1 and 2](/images/C.jpg)
Page 3
![Page 3](/images/B.jpg)
Page 4
![Page 4](/images/A.jpg)

## 4. Coding Plan & Pseudocode

[4. Author a plan for how you will code your PHP website.]

[Make sure you layout how to you plan to use PHP *includes*.]

The includes folder will contain init.php, header.php, footer.php

init.php: initialize the global variables (e.g. associate array of pages, title etc.).

header.php: implement the header or navigator. Define a php function to record the current location, using a variable to compare with pages defined in init.php.

footer.php: implement the footer, containing links like "contact me", LinkedIn, Facebook, Instagram.

The webpage php files include index.php, project.php, about.php, more.php

index.php -- home page.

about.php -- about Walt page.

project.php -- project information page.

more.php -- more about Walt page.


[Write your pseudocode for your user defined function.]

Use a print_project function to print out projects, because the number of projects may vary, and it will be easier if there is a function to deal with the variation. Also, in the function, the array of projects can be sorted based on end dates.
```
function print_project(projects):
    Sort elements in projects based on end date
    for project in projects
        print title
        for detail in project
            print detail
        endfor
    endfor

```
