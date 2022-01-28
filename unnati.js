function propertyExists(obj,path)
{
   var ans=false;
   if(obj!=NULL)
   {
       for(const key in obj)
       {
        if(key==path)
        {
           ans=true;
        }
       }
   }
   return ans;
}
propertyExists();