# japantravel
## General IT
1. The General protocol served by apache is HTTP/2 with port 80 associated.
2. Linus root folders:
- /bin
- /etc
- /home
3. You can use NEXTVAL to emulate Oracle Sequence in mYsql
4. You need to use sudo when you're a non-root user and you need to:
- Change the system settings
- Install a new package

## Development
1. Typical Website development workflow( non-agile workflow)
    - Planning: 
        Set and write a detailled planning for the project. Define technologies to use.
    - Analysis Requirements
        Gather all the requirements for the project. Create the ERD models, the wireframes.
    - Design
        Create the pages layouts and get them approuved. Get all the website content ready.
    - Coding
        Code the website
    - Tests
        All the website shold be tested.
    - Maintenance and reviews
        Keep working on the website, add more features if needed, do fixes.

2. [Menubar with CSS](menubar.css)
3. To create an HTML/ JavaScript gallery interface I'll proceed as follow:
    -  Create a drag-and-drop component, with a form for browser that don't support it.
    - Listen to the drop event, determine when files are dropped and trigger the files uploading using Ajax with a FormData
    - After the drop, create a preview using FileReader Api, reading the file date form the drop event,
    - Listen to the upload events and show progress of each file
4. Sequential Integers Sum with Ruby
    - Recursive way [file](sum.rb)
        ```
            def sum_recursive(numbers)
                return 0  if numbers.empty?
                number = numbers.pop
                return number + sum_recursive(numbers)
            end

        ```
    - Iterative way [file](sum.rb)
        ```
            def sum_iterative(numbers)
                res = 0
                numbers.each do |i|
                    res += i
                end
                res
            end
        ```
        The complexity is O(n)
5. A closuse Use exemple
    