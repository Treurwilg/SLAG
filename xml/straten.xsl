<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" indent="yes"/>
    <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head><title></title></head>
      <body>
        <h2>Groepen en Straten</h2>
        <table border="1">
           


           <xsl:for-each select="groepen/groep">
           <tr bgcolor="#9acd32">
  
           <td><xsl:value-of select="nummer"/></td>

           <xsl:for-each select="straten/straat">


                <td><xsl:value-of select="naam"/></td>


             
             </xsl:for-each>
           </tr>

            </xsl:for-each>
             
    
         </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>