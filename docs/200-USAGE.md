# Usage

- [Configure Config File](#adding-new-logs) (Optional)
- [Adding New Logs](#adding-new-logs)
- [Correcting Existing Logs](#correcting-existing-logs)
- [Get Log Insights](#get-log-insights)

### Configure config file (Optional)
You can configure options as per your preferences in the [config file](https://github.com/aagjalpankaj/lalo/blob/main/config/lalo.php).

### Adding New Logs
When you add a new log that doesn't meet the logging standards, this package will throw an `UnprocessableLogException`. 
It will only occur on non-production environments, and you can configure which environments should have this check enabled via the configuration file.

### Correcting Existing Logs
**If you have tests written:** Add `testing` environment to `validate_only_on` option in the config file. The tests may fail when existing logs don't meet the validation criteria. You'll need to update these logs to comply with the validation rules.

**If you don't have tests written:** You may notice `UnprocessableLogException` being thrown in your non-production environments. You'll need to correct the non-compliant logs.

### Get Log Insights
Run the following command to get quick insights about your application's logging patterns:

```bash
php artisan lalo:insights
```
