<?php
/**
 * Returns an array of contacts, retrieved from the us-500.csv
 * comma-separated values file.
 *
 * @return array
 */
function getContacts()
{
    static $contacts = [];
    ini_set('auto_detect_line_endings', true);

    if (!$contacts) {
        if (($handle = fopen('us-500.csv', 'r')) !== false) {
            $headerFields = [];
            $id = 1;
            while (($data = fgetcsv($handle)) !== false) {
                if (!$headerFields) {
                    // Grab the first row as our header fields
                    $headerFields = $data;
                    continue;
                }
                $contacts[$id] = array_combine($headerFields, $data);
                $id++;
            }
        }
    }

    return $contacts;
}

/**
 * Returns a contact by ID
 *
 * @param int $id
 * @return array
 */
function getContactById($id)
{
    return getContacts()[$id];
}

/**
 * Returns a specific page of contacts
 *
 * @param int $page The number of the page to return
 * @param int $perPage The number of items to return per page
 * @return array
 */
function getContactsPage($page, $perPage = 20)
{
    $offset = ($page * $perPage) - $perPage;
    return array_slice(getContacts(), $offset, $perPage, true);
}
