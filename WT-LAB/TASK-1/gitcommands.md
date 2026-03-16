# Git Industry Commands Documentation
Author: Vasim-220148

====================================================

1. git config --global user.name
Syntax:
git config --global user.name "Vasim-220148"

Purpose:
Sets the global Git username used for commits.

Example:
git config --global user.name "Vasim-220148"

Screenshot:
![Screenshot](Screenshot1.png)

----------------------------------------------------

2. git config --global user.email
Syntax:
git config --global user.email "n220148@rguktn.ac.in"

Purpose:
Sets the global Git email used for commits.

Example:
git config --global user.email "n220148@rguktn.ac.in"

Screenshot:
![Screenshot](Screenshot2.png)

----------------------------------------------------

3. git config --list
Syntax:
git config --list

Purpose:
Displays all Git configuration settings.

Example:
git config --list

Screenshot:
![Screenshot](Screenshot3.png)

----------------------------------------------------

4. git config --unset
Syntax:
git config --unset <key>

Purpose:
Removes a configuration entry.

Example:
git config --global --unset user.name

Screenshot:
![Screenshot](Screenshot4.png)

----------------------------------------------------

5. git init
Syntax:
git init

Purpose:
Initializes a new Git repository.

Example:
git init

Screenshot:
![Screenshot](Screenshot5.png)

----------------------------------------------------

6. git clone
Syntax:
git clone <repository-url>

Purpose:
Copies a remote repository.

Example:
git clone https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot6.png)

----------------------------------------------------

7. git clone --branch
Syntax:
git clone --branch <branch-name> <repository-url>

Purpose:
Clones a specific branch.

Example:
git clone --branch main https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot7.png)

----------------------------------------------------

8. git clone --depth
Syntax:
git clone --depth 1 <repository-url>

Purpose:
Creates a shallow clone.

Example:
git clone --depth 1 https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot8.png)

----------------------------------------------------

9. git status
Syntax:
git status

Purpose:
Shows repository status.

Example:
git status

Screenshot:
![Screenshot](Screenshot9.png)

----------------------------------------------------

10. git log
Syntax:
git log

Purpose:
Shows commit history.

Example:
git log

Screenshot:
![Screenshot](Screenshot10.png)

----------------------------------------------------

11. git log --oneline
Syntax:
git log --oneline

Purpose:
Shows commit history in one line.

Example:
git log --oneline

Screenshot:
![Screenshot](Screenshot11.png)

----------------------------------------------------

12. git log --graph
Syntax:
git log --graph --oneline

Purpose:
Displays commit graph.

Example:
git log --graph --oneline

Screenshot:
![Screenshot](Screenshot12.png)

----------------------------------------------------

13. git show
Syntax:
git show HEAD

Purpose:
Displays details of the latest commit.

Example:
git show HEAD

Screenshot:
![Screenshot](Screenshot13.png)

----------------------------------------------------

14. git diff
Syntax:
git diff

Purpose:
Shows file differences.

Example:
git diff

Screenshot:
![Screenshot](Screenshot14.png)

----------------------------------------------------

15. git diff --staged
Syntax:
git diff --staged

Purpose:
Shows staged differences.

Example:
git diff --staged

Screenshot:
![Screenshot](Screenshot15.png)

----------------------------------------------------

16. git blame
Syntax:
git blame <file>

Purpose:
Shows author for each line.

Example:
git blame README.md

Screenshot:
![Screenshot](Screenshot16.png)

----------------------------------------------------

17. git reflog
Syntax:
git reflog

Purpose:
Shows reference log.

Example:
git reflog

Screenshot:
![Screenshot](Screenshot17.png)

----------------------------------------------------

18. git shortlog
Syntax:
git shortlog

Purpose:
Summarizes commits by author.

Example:
git shortlog

Screenshot:
![Screenshot](Screenshot18.png)

----------------------------------------------------

19. git add
Syntax:
git add <file>

Purpose:
Adds file to staging area.

Example:
git add file1.txt

Screenshot:
![Screenshot](Screenshot19.png)

----------------------------------------------------

20. git add .
Syntax:
git add .

Purpose:
Adds all files.

Example:
git add .

Screenshot:
![Screenshot](Screenshot20.png)

----------------------------------------------------

21. git add -A
Syntax:
git add -A

Purpose:
Adds all changes.

Example:
git add -A

Screenshot:
![Screenshot](Screenshot21.png)

----------------------------------------------------

22. git restore
Syntax:
git restore <file>

Purpose:
Restores file changes.

Example:
git restore file1.txt

Screenshot:
![Screenshot](Screenshot22.png)

----------------------------------------------------

23. git restore --staged
Syntax:
git restore --staged <file>

Purpose:
Unstages a file.

Example:
git restore --staged file1.txt

Screenshot:
![Screenshot](Screenshot23.png)

----------------------------------------------------

24. git rm
Syntax:
git rm <file>

Purpose:
Deletes file.

Example:
git rm oldfile.txt

Screenshot:
![Screenshot](Screenshot24.png)

----------------------------------------------------

25. git mv
Syntax:
git mv old.txt new.txt

Purpose:
Renames file.

Example:
git mv old.txt new.txt

Screenshot:
![Screenshot](Screenshot25.png)

----------------------------------------------------

26. git commit
Syntax:
git commit

Purpose:
Records changes.

Example:
git commit

Screenshot:
![Screenshot](Screenshot26.png)

----------------------------------------------------

27. git commit -m
Syntax:
git commit -m "message"

Purpose:
Commit with message.

Example:
git commit -m "Initial commit"

Screenshot:
![Screenshot](Screenshot27.png)

----------------------------------------------------

28. git commit --amend
Syntax:
git commit --amend

Purpose:
Modify last commit.

Example:
git commit --amend

Screenshot:
![Screenshot](Screenshot28.png)

----------------------------------------------------

29. git branch
Example:
git branch

Screenshot:
![Screenshot](Screenshot29.png)

----------------------------------------------------

30. git branch -a
Example:
git branch -a

Screenshot:
![Screenshot](Screenshot30.png)

----------------------------------------------------

31. git branch -d
Example:
git branch -d feature

Screenshot:
![Screenshot](Screenshot31.png)

----------------------------------------------------

32. git branch -D
Example:
git branch -D feature

Screenshot:
![Screenshot](Screenshot32.png)

----------------------------------------------------

33. git checkout
Example:
git checkout main

Screenshot:
![Screenshot](Screenshot33.png)

----------------------------------------------------

34. git checkout -b
Example:
git checkout -b new-feature

Screenshot:
![Screenshot](Screenshot34.png)

----------------------------------------------------

35. git switch
Example:
git switch main

Screenshot:
![Screenshot](Screenshot35.png)

----------------------------------------------------

36. git switch -c
Example:
git switch -c dev

Screenshot:
![Screenshot](Screenshot36.png)

----------------------------------------------------

37. git merge
Example:
git merge feature

Screenshot:
![Screenshot](Screenshot37.png)

----------------------------------------------------

38. git merge --no-ff
Example:
git merge --no-ff feature

Screenshot:
![Screenshot](Screenshot38.png)

----------------------------------------------------

39. git remote
Example:
git remote

Screenshot:
![Screenshot](Screenshot39.png)

----------------------------------------------------

40. git remote -v
Example:
git remote -v

Screenshot:
![Screenshot](Screenshot40.png)

----------------------------------------------------

41. git remote add
Example:
git remote add origin https://github.com/Vasim-220148/project.git

Screenshot:
![Screenshot](Screenshot41.png)

----------------------------------------------------

42. git remote remove
Example:
git remote remove origin

Screenshot:
![Screenshot](Screenshot42.png)

----------------------------------------------------

43. git fetch
Example:
git fetch

Screenshot:
![Screenshot](Screenshot43.png)

----------------------------------------------------

44. git fetch --all
Example:
git fetch --all

Screenshot:
![Screenshot](Screenshot44.png)

----------------------------------------------------

45. git pull
Example:
git pull

Screenshot:
![Screenshot](Screenshot45.png)

----------------------------------------------------

46. git pull --rebase
Example:
git pull --rebase

Screenshot:
![Screenshot](Screenshot46.png)

----------------------------------------------------

47. git push
Example:
git push

Screenshot:
![Screenshot](Screenshot47.png)

----------------------------------------------------

48. git push -u origin main
Example:
git push -u origin main

Screenshot:
![Screenshot](Screenshot48.png)

----------------------------------------------------

49. git push --force
Example:
git push --force

Screenshot:
![Screenshot](Screenshot49.png)

----------------------------------------------------

50. git stash
Example:
git stash

Screenshot:
![Screenshot](Screenshot50.png)

----------------------------------------------------

51. git stash list

Screenshot:
![Screenshot](Screenshot51.png)

----------------------------------------------------

52. git stash pop

Screenshot:
![Screenshot](Screenshot52.png)

----------------------------------------------------

53. git stash apply

Screenshot:
![Screenshot](Screenshot53.png)

----------------------------------------------------

54. git stash drop

Screenshot:
![Screenshot](Screenshot54.png)

----------------------------------------------------

55. git stash clear

Screenshot:
![Screenshot](Screenshot55.png)

----------------------------------------------------

56. git reset
Example:
git reset HEAD

Screenshot:
![Screenshot](Screenshot56.png)

----------------------------------------------------

57. git reset --soft
Example:
git reset --soft HEAD~1

Screenshot:
![Screenshot](Screenshot57.png)

----------------------------------------------------

58. git reset --mixed
Example:
git reset --mixed HEAD~1

Screenshot:
![Screenshot](Screenshot58.png)

----------------------------------------------------

59. git reset --hard
Example:
git reset --hard HEAD~1

Screenshot:
![Screenshot](Screenshot59.png)

----------------------------------------------------

60. git revert
Example:
git revert HEAD

Screenshot:
![Screenshot](Screenshot60.png)

----------------------------------------------------

61. git clean -f

Screenshot:
![Screenshot](Screenshot61.png)

----------------------------------------------------

62. git clean -fd

Screenshot:
![Screenshot](Screenshot62.png)

----------------------------------------------------

63. git rebase
Example:
git rebase main

Screenshot:
![Screenshot](Screenshot63.png)

----------------------------------------------------

64. git rebase -i

Screenshot:
![Screenshot](Screenshot64.png)

----------------------------------------------------

65. git rebase --continue

Screenshot:
![Screenshot](Screenshot65.png)

----------------------------------------------------

66. git rebase --abort

Screenshot:
![Screenshot](Screenshot66.png)

----------------------------------------------------

67. git cherry-pick
Example:
git cherry-pick commit-id

Screenshot:
![Screenshot](Screenshot67.png)

----------------------------------------------------

68. git format-patch

Screenshot:
![Screenshot](Screenshot68.png)

----------------------------------------------------

69. git apply

Screenshot:
![Screenshot](Screenshot69.png)

----------------------------------------------------

70. git tag
Example:
git tag

Screenshot:
![Screenshot](Screenshot70.png)

----------------------------------------------------

71. git tag -a
Example:
git tag -a v1.0 -m "version 1.0"

Screenshot:
![Screenshot](Screenshot71.png)

----------------------------------------------------

72. git tag -d

Screenshot:
![Screenshot](Screenshot72.png)

----------------------------------------------------

73. git push --tags

Screenshot:
![Screenshot](Screenshot73.png)

----------------------------------------------------

74. git submodule add

Screenshot:
![Screenshot](Screenshot74.png)

----------------------------------------------------

75. git bisect

Screenshot:
![Screenshot](Screenshot75.png)

----------------------------------------------------