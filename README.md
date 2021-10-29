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
5. A closure Use exemple
    ```
        function gainXP(x) {
            return function(y) {
                return x + y;
            };
        }

        const xpA = gainXP(5)
        const xpB = gainXP(10)
    ```

## Database
- List the definitions of a given word
    ```
        SELECT * FROM definitions WHERE word_id = 1
    ```
- Count valid word more efficiently using  INNER JOIN. Thus, only the words with a valid translation will the counted.
    ```
        SELECT count(*) FROM words INNER JOIN translations ON translations.word_id = words.id
    ```

## PHP
1. Difference between "extends" and "implement"
    In OOP, we use extends on a class to inherit attributes and methods from a parent class. The attributes and methodes can be overwritten in th child class.

    In the otherhand, "implements" is used to implement and interface and define its methods in the child class. SSo the methods defined in the interface are empty.  
    Exemple: 
    ``` 
    Extends
        class User {
            private $name;

            public function set_name($name){
                $this->name=$name
            }

            public function get_name(){
                return $this->name
            }
        }

        class Admin extends User{
            // $name is available here
            // set_name is available here
            // get_name is available here
            // we can add another method or attribute
            private $level

            public function set_level($level){
                $this->level = $level
            }

            public function get_level(){
                return $this->level
            }

        }

        $user = new User();
        $user->set_name('Amadou');
        $user->get_name(); // returns: 'Amadou'
        $user->set_level(1); // Throw Fatal Error:  Call to undefined function set_level

        $admin = new Admin();
        $admin->set_name('Boss');
        $admin->get_name(); // returns 'Boss'
        $admin->set_level(10);
        $admin->get_level(); //returns '10'

    Implements
        interfacte Help{
            public function sayHelp();
            
        }

        class Admin implements User{
            public function sayHelp(){
                echo 'Help';
            }
        }

    ```

2. 