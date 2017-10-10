<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" indent="yes"/>
  <xsl:template match="/child::boek">
   <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
       <title>
         <xsl:value-of select="child::titel"/>
       </title>
     </head>
     <body>
     <h1>XML Development with Java 2</h1>
     <table>
       <tr>
         <td>Titel:</td>
         <td>
           <xsl:value-of select="child::titel"/>
         </td>
       </tr>
       <tr>
         <td>Door:</td>
         <td>
           <xsl:value-of select="child::auteur"/>
         </td>
       </tr>
       <tr>
         <td>Kost:</td>
         <td>
           <xsl:value-of select="child::prijs/attribute::valuta"/>
           <xsl:text> </xsl:text>
           <xsl:value-of select="child::prijs"/>
         </td>
       </tr>
       <tr>
         <td>Categorie:</td>
         <td>
           <xsl:value-of select="child::categorie"/>
         </td>
       </tr>
     </table>
     </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
