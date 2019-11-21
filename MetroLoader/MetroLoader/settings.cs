using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MetroLoader
{
    public static class Settings
    {
        public static string host { get; set; }
        public static string user_agent { get; set; }
        public static byte[] file { get; set; }

        static Settings()
        {
            host = "https://yourwebsite.com/"; // make the the url to your website, make sure to add "/" after it so it looks like ".com/"
            user_agent = "youruseragent"; // make it the useragent to access "yourwebsite.com/dlls" directory, to edit the useragent... go to that directory with an ftp client and open the .htaccess
        }
    }

}