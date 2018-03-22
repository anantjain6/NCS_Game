# Night Knitting
A web based technical game

## Branch Structure
* ``master`` is contains ready to publish code.
* ``skip-code`` branch contains code without some validation to test the codes. For example validation that game can be played from 8pm to 8am
</ol>

## Installation
1. Upload all the files to ``public_html``.
2. Upload database backup ``ncs_game.sql``
3. In ``config.php`` change the database detail
4. In ``gpConfig.php`` change ``$clientId``, ``$clientSecret`` and ``$redirectURL`` to set Google OAuth detail for Login with Google account
