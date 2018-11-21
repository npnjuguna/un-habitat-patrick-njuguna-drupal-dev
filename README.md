# Drupal Interview Test Submission

This submission contains a custom drupal plugin `chart_block_nodes` to display a chart on the front page with a count of nodes for each defined content type and a custom template `bootstrap_cdn_subtheme` with 404 error handling.

## Usage

Clone the repository to your local machine.

Following are basic instructions on how to restore the site on your local Acquia Dev Desktop Environment. 

```
git clone https://github.com/npnjuguna/un-habitat-patrick-njuguna-drupal-dev.git
```

1. In the `un-habitat-patrick-njuguna-drupal-dev` folder, the is a folder `non-drupal` that contains `patrick-njuguna-inc-files-folder.zip` files with code files and `patrick_njuguna.sql` database dump.

1. Extract the `patrick-njuguna-inc-files-folder.zip` to a location on the machine. A folder `patrick-njuguna` will be created which has the `web` root folder.

1. Using Acquia Dev Desktop, add a site using the `Import Local Drupal website` option and fill the options below:
    * Local codebase folder: choose the `web` folder you have just extracted
    * Local site name: `patrick-njuguna`
    * Use PHP: `7.1.11`
    * Database: `Start with MySQL database dump file`
    * Dump file: choose the `patrick_njuguna.sql`
    * New database name: `patrick_njuguna`

1. Click `OK` to import.
1.  Open the local site: [http://patrick-njuguna.dd:8083/](http://patrick-njuguna.dd:8083/)
1. The front end will display.

1. At the bottom there is a `Login` link. Reset the password for drupal user `admin` and click login:

1. You can explore [http://patrick-njuguna.dd:8083/admin](http://patrick-njuguna.dd:8083/admin)
