# news_singlepage
Extends tx_news (TYPO3) with a field to link to a single page uid for detail view content.

This makes it possible to create more sophisticated detail views.

# Installation
Install the extension via composer or the TYPO3 Extension Manager.

## Usage
Simply select a page in the news entry where content records are stored and
render them in your news detail template, e.g. using lib.dynamicContent:

```
    <f:if condition="{newsItem.singleContentPid}">
        <f:cObject typoscriptObjectPath="lib.dynamicContent" data="{colPos: '0', pageUid: newsItem.singleContentPid}" />
    </f:if>
```

By using different columns on the single detail page you can render the content in different
parts of the news detail template. For example have another column with index 10 and use that
for the header.


